import axios from 'axios';


export default class AuthService {

    async doUserLogin(credential){
        try {
            const response = await axios.post("http://localhost:8000/api/login", credential);
            return response.data;
        } catch (error) {
            console.log('Error', error.response);
            return false;
        }
    }
}