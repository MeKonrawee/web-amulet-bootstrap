const express = require("express");
const {
  GetHistoryService: getHistory,
} = require("../controllers/historyController");

const {
  InsertMenuService: insertAmulet,
  UpdateMenuService: updateAmulet,
  GetAmuletService: getAmulet,
  DeleteMenuService: deleteAmulet,
  FindMenuService: findAmulet,
} = require("../controllers/amuletController");

const swaggerUi = require("swagger-ui-express");
const swaggerDoc = require("../swagger");

const router = express.Router();

router.use("/swagger", swaggerUi.serve, swaggerUi.setup(swaggerDoc));

router.get("/history", getHistory);
router.get("/amulet", getAmulet);
router.post("/amulet", insertAmulet);
router.post("/amulet/:id", updateAmulet);
router.get("/amulet/delete/:id", deleteAmulet);
router.get("/amulet/find/:id", findAmulet);

module.exports = {
  routes: router,
};
