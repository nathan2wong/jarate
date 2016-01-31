var green = [255, 245, 238, 239, 211, 188];
var red = [255, 244, 233, 230, 158, 117];
var blue = [255, 172, 55, 1, 0, 1];
var percents = [0, 16.6, 33.2, 49.8, 65, 71];
var linGreen = [];
var linRed = [];
var mean = 0;

function getClosest(pointsX, pointsY, x, y) {
    var minDist = (pointsX[0] * pointsX[0]) + (pointsY[0] * pointsY[0]);
    var coor = 0;
    for(var i = 1; i < pointsX.length; i++) {
        var dist = (pointsX[i]-x) * (pointsX[i]-x) + (pointsY[i]-y)*(pointsY[i]-y);
        if(dist < minDist) {
            minDist = dist;
            coor = i;
        }
    }
    console.log("the result of getCloset is: " + coor);
    return coor;
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

//console.log(euclideanDistance(c1, c2))

function linearize(pointsX, pointsY, checkPoint) {
    var x = pointsX[checkPoint];
    var y = pointsY[checkPoint];
    console.log('checkPoint is: ' + checkPoint);
    var linX;
    var linY;
    for(var i = 0; i < pointsX.length; i++) {
        console.log("pointsX is " + pointsX[i] + " and x is: " + x);
        console.log("pointsY is " + pointsY[i] + " and y is: " + y);
        
        if(pointsX[i] < x && pointsY[i] < y) {
            console.log("am i in the if statment");
            linX = (Math.log(pointsY[i]))/(Math.log(y));
            linY = (Math.log(pointsX[i]))/(Math.log(x));
            break;
        }
        else {
            linX = (Math.log(pointsY[i]))/(Math.log(y));
            linY = (Math.log(pointsX[i]))/(Math.log(x));
            console.log("did not go into if statementq")
        }
    }
    console.log("the linearize result for linX is : " + linX);
    console.log("the linearize result for linY is : " + linY);
    return [linX, linY];
}

function percentage(pointsX, pointsY, percents, x, y) {
    var checkPoint = getClosest(pointsX, pointsY, x, y);
    var linear = linearize(pointsX, pointsY, checkPoint);
    var percenX = linear[0] * percents[checkPoint];
    var percenY = linear[1] * percents[checkPoint];
    return [percenX, percenY];
}

console.log(percentage(red, green, percents, 220, 200))
