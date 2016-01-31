function parseColor(color) { //delete later
	var r = parseInt(color.substring(0, 2), 16)
	var g = parseInt(color.substring(2, 4), 16)
	var b = parseInt(color.substring(4, 6), 16)
	return [r, g, b]
}

function euclideanDistance(v1, v2) {
    var i,
        d = 0;

    for (i = 0; i < v1.length; i++) {
        d += (v1[i] - v2[i])*(v1[i] - v2[i]);
    }

    return Math.sqrt(d);
}

var c1 = parseColor("FFFFFF");
var c2 = parseColor("ffffff");

console.log(euclideanDistance(c1, c2))
