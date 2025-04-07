import {initializeApp} from "https://www.gstatic.com/firebasejs/11.3.1/firebase-app.js";
import {getAuth, GoogleAuthProvider, signInWithPopup} from "https://www.gstatic.com/firebasejs/11.3.1/firebase-auth.js";
import {getAnalytics} from "https://www.gstatic.com/firebasejs/11.3.1/firebase-analytics.js";

const firebaseConfig = {
    apiKey: "AIzaSyABMSFxdtfT_set9rUDhcWVLMW5fYxYVyA",
    authDomain: "authentication-e4c8c.firebaseapp.com",
    projectId: "authentication-e4c8c",
    storageBucket: "authentication-e4c8c.firebasestorage.app",
    messagingSenderId: "580479540930",
    appId: "1:580479540930:web:d0d0b76869873d8d25655b",
    measurementId: "G-JQ17FWCCSY"
};

const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

const auth = getAuth(app);
auth.languageCode = "en-US";

const provider = new GoogleAuthProvider();

const googleLogin = document.getElementById('google-button');
googleLogin.addEventListener("click", function () {
    signInWithPopup(auth, provider)
        .then((result) => {
            const credential = GoogleAuthProvider.credentialFromResult(result);
            const user = result.user;
            console.log(user);
            window.location.href = "redirect.html";

        }).catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
    });
})