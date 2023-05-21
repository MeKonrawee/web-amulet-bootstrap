const express = require("express");
const {
  InsertHistoryService: insertHistory,
  UpdateHistoryService: updateHistory,
  GetHistoryService: getHistory,
  DeleteHistoryService: deleteHistory,
  FindHistoryService: findHistory,
} = require("../controllers/historyController");

const swaggerUi = require("swagger-ui-express");
const swaggerDoc = require("../swagger");

const router = express.Router();

router.use("/swagger", swaggerUi.serve, swaggerUi.setup(swaggerDoc));

router.post("/history", insertHistory);
router.post("/history/:id", updateHistory);
router.get("/history", getHistory);
router.get("/history/delete/:id", deleteHistory);
router.get("/history/find/:id", findHistory);

module.exports = {
  routes: router,
};
