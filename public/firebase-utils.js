class StariesAccount {
    static mail = '';
    static async Register(email, password, errorHandler = null){
        try {
            await firebase.auth().createUserWithEmailAndPassword(email, password);
            document.location.href = "/Login/login.html";
        } catch (e) {
            if(errorHandler) errorHandler(e);
        }
    }
    static async Login(email, password, errorHandler = null){
        try {
            await firebase.auth().signInWithEmailAndPassword(email, password) ;
            document.location.href =  "/staries-home.html";
        } catch (e) {
            if(errorHandler) errorHandler(e);
        }
    }
    static async Observer(isNotLogin = true){
        await firebase.auth().onAuthStateChanged((user)=>{
            if(user){
                this.mail = user;
                if(!isNotLogin){
                    document.location.href  =  "/staries-home.html";
                }
            }else{
                if(isNotLogin){
                    document.location.href  =  "/index.html";
                }
            }
        });
    }
    static async  Logout(errorHandler = null){
        try {
            await firebase.auth().signOut();
            document.location.href =  "/index.html";
        } catch (e) {
            if(errorHandler) errorHandler(e);
        }
        
    }
}