"use strict";

const firebase = require("../db");
const firestore = firebase.firestore();
const HistoryResponse = require("../models/history");

const insertHistory = async (req, res, next) => {
  try {
    const data = req.body;
    await firestore.collection("history").doc().set(data);

    return res.status(201).json("Success!");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const getHistory = async (req, res, next) => {
  try {
    const history = await firestore.collection("history");
    const data = await history.get();
    const historyArray = [];
    if (data.empty) {
      return res.status(404).json("No found");
    } else {
      data.forEach((doc) => {
        const history = new HistoryResponse(
          doc.id,
          doc.data().name,
          doc.data().image,
          doc.data().details
        );
        historyArray.push(history);
      });
      return res.status(200).json(menusArray);
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const deleteHistory = async (req, res, next) => {
  try {
    const id = req.params.id;
    await firestore.collection("history").doc(id).delete();
    return res.status(200).json("History deleted successfully");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const findHistory = async (req, res, next) => {
  try {
    const id = req.params.id;
    const history = await firestore.collection("history").doc(id);
    const data = await history.get();
    if (!data.exists) {
      return res.status(404).json("History not found");
    } else {
      return res.status(200).json(data.data());
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const updateHistory = async (req, res, next) => {
  try {
    const id = req.params.id;
    const data = req.body;
    const history = await firestore.collection("history").doc(id);
    await history.update(data);
    return res.status(200).json("History updated successfully");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

module.exports = {
  InsertHistoryService: insertHistory,
  UpdateHistoryService: updateHistory,
  GetHistoryService: getHistory,
  DeleteHistoryService: deleteHistory,
  FindHistoryService: findHistory,
};
