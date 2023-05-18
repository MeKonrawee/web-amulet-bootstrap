const firebase = require("firebase");
const Schema = firebase.Schema;

const schema = new Schema({
  name: { type: String, unique: true, required: true },
  image: { type: String, required: true },
  history: { type: String, required: true },
  createdDate: { type: Date, default: Date.now },
});

schema.set("toJSON", {
  virtuals: true,
  versionKey: false,
  transform: function (doc, ret) {
    delete ret._id;
  },
});

module.exports = firebase.model("History", schema);
