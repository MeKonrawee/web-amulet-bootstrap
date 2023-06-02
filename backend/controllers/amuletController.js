"use strict";

const firebase = require("../db");
const firestore = firebase.firestore();
const AmuletResponse = require("../models/amulet");

const insertAmulet = async (req, res, next) => {
  try {
    const data = req.body;
    await firestore.collection("amulet").doc().set(data);

    return res.status(201).json("Success!");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const getAmulet = async (req, res, next) => {
  try {
    const amulet = await firestore.collection("amulet");
    const data = await amulet.get();
    const amuletArray = [];
    if (data.empty) {
      return res.status(404).json("No amulet found");
    } else {
      data.forEach((doc) => {
        const amulet = new AmuletResponse(
          doc.id,
          doc.data().name,
          doc.data().image
        );
        amuletArray.push(amulet);
      });
      return res.status(200).json(amuletArray);
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const deleteAmulet = async (req, res, next) => {
  try {
    const id = req.params.id;
    await firestore.collection("amulet").doc(id).delete();
    return res.status(200).json("amulet deleted successfully");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const findAmulet = async (req, res, next) => {
  try {
    const id = req.params.id;
    const amulet = await firestore.collection("amulet").doc(id);
    const data = await amulet.get();
    if (!data.exists) {
      return res.status(404).json("amulet not found");
    } else {
      return res.status(200).json(data.data());
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

const updateAmulet = async (req, res, next) => {
  try {
    const id = req.params.id;
    const data = req.body;
    const amulet = await firestore.collection("amulet").doc(id);
    await amulet.update(data);
    return res.status(200).json("amulet updated successfully");
  } catch (err) {
    console.error(err);
    return res.status(400).json("bad request");
  }
};

module.exports = {
  InsertMenuService: insertAmulet,
  UpdateMenuService: updateAmulet,
  GetAmuletService: getAmulet,
  DeleteMenuService: deleteAmulet,
  FindMenuService: findAmulet,
};
