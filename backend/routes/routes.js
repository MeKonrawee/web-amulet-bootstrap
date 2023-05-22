const express = require("express");
const {
  GetHistoryService: getHistory,
} = require("../controllers/historyController");

const swaggerUi = require("swagger-ui-express");
const swaggerDoc = require("../swagger");

const router = express.Router();

router.use("/swagger", swaggerUi.serve, swaggerUi.setup(swaggerDoc));

router.get("/history", getHistory);

module.exports = {
  routes: router,
};
