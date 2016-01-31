// [0, ..]
var pointsX = [0, 1, 2, 3, 4];
var pointsY = [0, 1, 2, 3, 4];

function parseColor(color) { //delete later
	var r = parseInt(color.substring(0, 2), 16)
	var g = parseInt(color.substring(2, 4), 16)
	var b = parseInt(color.substring(4, 6), 16)
	return [r, g, b]
}

var colors = ['FFFFFF', 'F5F4AC', 'EEE937', 'EFE601', 'D39E00', 'BC7501'].map(parseColor)

//function log3(n) {
//	return Math.log(n) / Math.log(3)
// }
function ln(inputR) {
    Math.log(inputR)*(1/Math.log(2.7182818285))
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
var c2 = parseColor("000000");

console.log(euclideanDistance(c1, c2))

//function getDehydration(color) {
//	var realcolor = parseColor(color)
//	console.log(realcolor)
////	console.log(colors)
//    function location(realcolor) {
////        realcolor[0,1] //array of RGB values for R and G ?
//        var calculatedGcolor = 483.17*ln(realcolor[0]) - 2417.4 //R log value for series of 4 data points: fix later
//    }
//}

console.log(getDehydration('e3fb33'))

var userRGBdata = document.getElementById('color');
function parseColor(color) {
var scaledR = color[0]/realcolor[0]
var scaledG = color[1]/realcolor[1]
var scaledB = color[2]/realcolor[2]
}

function dehydration() {
    
}


function getClosest() {
    var minDist = pointsX[0] * pointsX[0]) + (pointsY[0] * pointsY[0]);
    var coor = 0;
    for(var i = 1; i < points.length; i++) {
        var dist = (pointsX[i] * pointsX[i]) + (pointsY[i] * pointsY[i]);
        if(dist < minDist) {
            minDist = dist;
            coor = i;
        }
    }
    return i;
}

function 