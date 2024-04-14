//unix epoc time https://www.epochconverter.com/
const END_DATE = 1709575200000;
const d = new Date(END_DATE);
const date = d.toLocaleTimeString("es", {
    hour: "2-digit",
    minute: "2-digit",
});

//Get current timeZone
const tzOffset = d.getTimezoneOffset() / 60; //entrega la diferencia sobre 60 mints
const diff = tzOffset * -1;
const gmt = diff > 0 ? `GMT+${diff}` : `GMT-${Math.abs(diff)}`;

const TZ_DICTIONARY = {
    "GMT+1": "CET",
    "GMT-5": "UTC",
};
const tz = TZ_DICTIONARY[gmt] ?? gmt;

const selfScript = document.currentScript;
// selfScript.parentNode.innerHTML = "Hola";
// selfScript.parentNode.innerHTML = `${date}H ${gmt}`;
selfScript.parentNode.innerHTML = `${date}H ${tz}`;