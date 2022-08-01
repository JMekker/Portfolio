let count = 0;
let multiplier = 130;
let adder = 125;

function changeAllColors() {

	let x1 = Math.floor(Math.random() * multiplier + adder);
	let x2 = Math.floor(Math.random() * multiplier + adder);
	let x3 = Math.floor(Math.random() * multiplier + adder);
	let background = rgbToHex(x1, x2, x3);

	let y1 = Math.floor(Math.random() * multiplier);
	let y2 = Math.floor(Math.random() * multiplier);
	let y3 = Math.floor(Math.random() * multiplier);
	let text = rgbToHex(y1, y2, y3);

	let z1 = Math.floor(Math.random() * multiplier + adder);
	let z2 = Math.floor(Math.random() * multiplier + adder);
	let z3 = Math.floor(Math.random() * multiplier + adder);
	let glow = rgbToHex(z1, z2, z3);

	document.querySelector(':root').style.setProperty('--background', background);
	document.querySelector(':root').style.setProperty('--text', text);
	document.querySelector(':root').style.setProperty('--glow', glow);
}

function changeColors() {

	if (count == 0) {
		let x1 = Math.floor(Math.random() * multiplier + adder);
		let x2 = Math.floor(Math.random() * multiplier + adder);
		let x3 = Math.floor(Math.random() * multiplier + adder);
		let background = rgbToHex(x1, x2, x3);
		document.querySelector(':root').style.setProperty('--background', background);
		count++;
	} else if (count == 1) {
		let y1 = Math.floor(Math.random() * multiplier);
		let y2 = Math.floor(Math.random() * multiplier);
		let y3 = Math.floor(Math.random() * multiplier);
		let text = rgbToHex(y1, y2, y3);
		document.querySelector(':root').style.setProperty('--text', text);
		count++;
	} else {
		let z1 = Math.floor(Math.random() * multiplier + adder);
		let z2 = Math.floor(Math.random() * multiplier + adder);
		let z3 = Math.floor(Math.random() * multiplier + adder);
		let glow = rgbToHex(z1, z2, z3);
		document.querySelector(':root').style.setProperty('--glow', glow);
		count = 0;
	}
}

function rgbToHex(r, g, b) {
	return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
}

window.onload = function () {
	changeAllColors();
};