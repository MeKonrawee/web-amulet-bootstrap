const express = require("express");
const {
  GetHistoryService: getHistory,
} = require("../controllers/historyController");

const {
  GetAmuletService: getAmulet,
} = require("../controllers/amuletController");

const swaggerUi = require("swagger-ui-express");
const swaggerDoc = require("../swagger");

const router = express.Router();

router.use("/swagger", swaggerUi.serve, swaggerUi.setup(swaggerDoc));

router.get("/history", getHistory);
router.get("/amulet", getAmulet);

module.exports = {
  routes: router,
};
