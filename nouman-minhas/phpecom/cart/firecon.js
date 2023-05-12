var firebaseConfig = {
  apiKey: "AIzaSyDB8caF6HgNeWBt3XCb0-ZWsfEpitDymXY",
  authDomain: "message-c1d7e.firebaseapp.com",
  databaseURL: "https://message-c1d7e-default-rtdb.firebaseio.com",
  projectId: "message-c1d7e",
  storageBucket: "message-c1d7e.appspot.com",
  messagingSenderId: "529561429362",
  appId: "1:529561429362:web:cfe2ac1356779336b2a9eb",
  measurementId: "G-HT8HXQPGV8"
  };


firebase.initializeApp(firebaseConfig);
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);