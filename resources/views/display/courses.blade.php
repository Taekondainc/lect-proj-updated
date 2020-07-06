
<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
<link rel="icon" type="image/png" href="{{asset('css/images/logo.png')}}">
<style>video {
  background-color: #ddd;
  border-radius: 7px;
  margin: 10px 0px 0px 10px;
  width: 320px;
  height: 240px;
}
.btn{
  margin: 5px 0px 0px 10px !important;
  width: 654px;
}</style><link rel="stylesheet" href="{{asset('css/index.css')}}">
@extends('layouts.profile')

@section('content')
<div id="conta" style="padding-bottom: 40px;" ><a class="ai_assist"><img id="ai_assist" src="{{ asset('css/images/ai_assist.png') }}" alt="">
        <h5>Site Assistant</h5>
    </a>
<div class="container_form" >



  <h1>Your ClassROOM</h1>

    <h1>Join class</h1>
    <video id="yourVideo" autoplay muted playsinline></video>
    <video id="friendsVideo" autoplay playsinline></video>
    <br />
    <button onclick="showFriendsFace()"  id="btn-class" type="button" class="btn btn-primary btn-lg">
        <span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span>Join Class</button>
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
  </div>
</div>

<script>//Create an account on Firebase, and use the credentials they give you in place of the following
var config = {
  apiKey: "AIzaSyCOupEBD9EREwvRCbnUyJLOBdiaGw2qRKY",
    authDomain: "videocall-32a7b.firebaseapp.com",
    databaseURL: "https://videocall-32a7b.firebaseio.com",
    projectId: "videocall-32a7b",
    storageBucket: "videocall-32a7b.appspot.com",
    messagingSenderId: "822921254296"
};
firebase.initializeApp(config);

var database = firebase.database().ref();
var yourVideo = document.getElementById("yourVideo");
var friendsVideo = document.getElementById("friendsVideo");
var yourId = Math.floor(Math.random()*1000000000);
//Create an account on Viagenie (http://numb.viagenie.ca/), and replace {'urls': 'turn:numb.viagenie.ca','credential': 'websitebeaver','username': 'websitebeaver@email.com'} with the information from your account
var servers = {'iceServers': [{'urls': 'stun:stun.services.mozilla.com'}, {'urls': 'stun:stun.l.google.com:19302'}, {'urls': 'turn:numb.viagenie.ca','credential': 'Hymanye','username': 'jonathan.li.ttexpert@gmail.com'}]};
var pc = new RTCPeerConnection(servers);
pc.onicecandidate = (event => event.candidate?sendMessage(yourId, JSON.stringify({'ice': event.candidate})):console.log("Sent All Ice") );
pc.onaddstream = (event => friendsVideo.srcObject = event.stream);

function sendMessage(senderId, data) {
    var msg = database.push({ sender: senderId, message: data });
    msg.remove();
}

function readMessage(data) {
    var msg = JSON.parse(data.val().message);
    var sender = data.val().sender;
    if (sender != yourId) {
        if (msg.ice != undefined)
            pc.addIceCandidate(new RTCIceCandidate(msg.ice));
        else if (msg.sdp.type == "offer")
            pc.setRemoteDescription(new RTCSessionDescription(msg.sdp))
              .then(() => pc.createAnswer())
              .then(answer => pc.setLocalDescription(answer))
              .then(() => sendMessage(yourId, JSON.stringify({'sdp': pc.localDescription})));
        else if (msg.sdp.type == "answer")
            pc.setRemoteDescription(new RTCSessionDescription(msg.sdp));
    }
};

database.on('child_added', readMessage);

function showMyFace() {
  navigator.mediaDevices.getUserMedia({audio:true, video:true})
    .then(stream => yourVideo.srcObject = stream)
    .then(stream => pc.addStream(stream));
}

function showFriendsFace() {
  pc.createOffer()
    .then(offer => pc.setLocalDescription(offer) )
    .then(() => sendMessage(yourId, JSON.stringify({'sdp': pc.localDescription})) );
}
</script>
@endsection
@extends('layouts.sidebar')
