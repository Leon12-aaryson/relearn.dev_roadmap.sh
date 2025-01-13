const fs = require("fs");
const { json } = require("stream/consumers");

fs.readFile("name.json", "utf-8", (err, jsonString) => {
    if (err) {
        console.log(err)
    } else {
        try {
            const data = JSON.parse(jsonString);
            console.log(data.occupation);
        } catch (err) {
            console.log("Error parsing JSON", err)
        }
    }
});
