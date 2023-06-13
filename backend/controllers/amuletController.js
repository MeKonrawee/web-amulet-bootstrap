"use strict";

const firebase = require("../db");
const firestore = firebase.firestore();
const AmuletResponse = require("../models/amulet");

const getAmulet = async (req, res, next) => {
  try {
    const keyword = req.query.keyword;
    if (keyword === "") {
      const amulet = await firestore.collection("amulet");
      const data = await amulet.get();
      const amuletArray = [];
      if (data.empty) {
        return res.status(404).json("No found");
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
    } else {
      const amulet = await firestore.collection("amulet");
      const data = await amulet.get();
      const amuletArray = [];
      if (data.empty) {
        return res.status(404).json("No found");
      } else {
        data.forEach((doc) => {
          if (doc.data().name.includes(keyword)) {
            const amulet = new AmuletResponse(
              doc.id,
              doc.data().name,
              doc.data().image
            );
            amuletArray.push(amulet);
          }
        });
        return res.status(200).json(amuletArray);
      }
    }
  } catch (err) {
    console.error(err);
    return res.status(400).json([]);
  }
};

module.exports = {
  GetAmuletService: getAmulet,
};
