// [0, ..]
function parseColor(color) {
	var r = parseInt(color.substring(0, 2), 16)
	var g = parseInt(color.substring(2, 4), 16)
	var b = parseInt(color.substring(4, 6), 16)
	return [r, g, b]
}

var colors = ['FFFFFF', 'F5F4AC', 'EEE937', 'EFE601', 'D39E00', 'BC7501'].map(parseColor)

function log3(n) {
	return Math.log(n) / Math.log(3)
}

function getDehydration(color) {
	color = parseColor(color)
	console.log(color)
	console.log(colors)
}

console.log(getDehydration('e3fb33'))
