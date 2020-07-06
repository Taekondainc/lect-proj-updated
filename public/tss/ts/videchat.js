'use strict';

// Call main() in demo.js
main();

const canvas = document.querySelector('canvas');
const video = document.querySelector('video');

const stream = canvas.captureStream();
video.srcObject = stream;
r video = document.querySelector('video');

// Optional frames per second argument.
var stream = canvas.captureStream(25);
// Set the source of the <video> element to be the stream from the <canvas>.
video.srcObject = stream;