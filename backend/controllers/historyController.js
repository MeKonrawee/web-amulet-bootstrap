"use strict";

const firebase = require("../db");
const firestore = firebase.firestore();
const HistoryResponse = require("../models/history");

const getHistory = async (req, res, next) => {
  try {
    const keyword = req.query.keyword;
    if (keyword === "") {
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
        return res.status(200).json(historyArray);
      }
    } else {
      const history = await firestore.collection("history");
      const data = await history.get();
      const historyArray = [];
      if (data.empty) {
        return res.status(404).json("No found");
      } else {
        data.forEach((doc) => {
          if (doc.data().name.includes(keyword)) {
            const history = new HistoryResponse(
              doc.id,
              doc.data().name,
              doc.data().image,
              doc.data().details
            );
            historyArray.push(history);
          }
        });
        return res.status(200).json(historyArray);
      }
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json([]);
  }
};

module.exports = {
  GetHistoryService: getHistory,
};
