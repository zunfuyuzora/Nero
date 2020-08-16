import React, {Component} from 'react';

export default class Login extends Component {
    constructor(props){
        super(props);
        this.state = {
            username : '',
            password : '',
            isChecked : false
        }
    }

    async handleFormSubmit(event){
        event.preventDefault();
        const postData = {
            username: this.state.username,
            password: this.state.password
        }
        const response = await this.doUserLogin(postData);
        console.log(response);
    }

    async doUserLogin(credential) {
        try {
            const response = await axios.post("http://localhost:8000/api/login", credential);
            return response.data;
        } catch (error) {
            console.log('Error', error.response);
            return false;
        }
    }

    handleChecked() {
        this.setState({ isChecked: !this.state.isChecked});
    }

    render() {
        const { username, password, isChecked } = this.state;
        return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Login Form</div>

                        <div className="card-body">
                            <form onSubmit={event => this.handleFormSubmit(event)}>

                                <div className="form-group row">
                                    <label htmlFor="email" className="col-md-4 col-form-label text-md-right">Email Address</label>

                                    <div className="col-md-6">
                                        <input id="email" type="email" className="form-control" name="username" value={username} 
                                        onChange={event => this.setState({username : event.target.value})} required autoFocus/>
                                    </div>
                                </div>

                                <div className="form-group row">
                                    <label htmlFor="password" className="col-md-4 col-form-label text-md-right">Password</label>

                                    <div className="col-md-6">
                                        <input id="password" type="password" className="form-control" value={password} 
                                        onChange={event => this.setState({password: event.target.value})} name="password" required />
                                    </div>
                                </div>

                                <div className="form-group row">
                                    <div className="col-md-6 offset-md-4">
                                        <div className="form-check">
                                            <input className="form-check-input" type="checkbox" name="remember" id="remember" checked={isChecked}
                                            onChange={() => this.handleChecked()} />

                                            <label className="form-check-label" htmlFor="remember" >Remember Me</label>
                                        </div>
                                    </div>
                                </div>

                                <div className="form-group row mb-0">
                                    <div className="col-md-8 offset-md-4">
                                        <button type="submit" className="btn btn-primary">Login</button>
                                        <a className="btn btn-link" href="">
                                            Forgot Your Password?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        )
    }
}