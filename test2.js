var green = [255, 245, 238, 239, 211, 188];
var red = [255, 244, 233, 230, 158, 117];
var blue = [255, 172, 55, 1, 0, 1];
var percentage = []
var linGreen[];
var linRed[];
var mean = 0;
function getClosest(pointsX, pointsY, x, y) {
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

function linearize(pointsX, poinstY, checkpoint) {
    var x = pointsX[checkPoint];
    var y = pointsY[checkPoint];
    var linX;
    var linY;
    for(var i = 0; i < green.length; i++) {
        if(pointsX[i] < x && pointsY[i] < x) {
            linX = (Math.log(pointsY[i]))/(Math.log(y));
            linY = (Math.log(pointsX[i]))/(Math.log(x));
            break;
        }
    }
    return [linX, linY];
}

function percentage(pointsX, pointsY, percentage, x, y) {
    var checkPoint = getClosest(pointsX, pointsY, x, y);
    var linear = linearize(pointsX, pointsY, checkPoint);
    var percenX = linear[0] * percentage[checkPoint];
    var percenY = linear[1] * percentage[checkPoint];
    return [percenX, percenY];
}


