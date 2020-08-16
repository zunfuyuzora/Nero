import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

import ProductCard from '../include/product-card';

export default class Home extends Component {

    constructor(props){
        super(props);
        this.state = {
            item: [
                {
                    id: '1',
                    image: 'http://localhost:8000/images/product/nero-keychain.jpg',
                    name: 'Nero Keychain',
                    price: '$ 5.00',
                },
                {
                    id: '2',
                    image: 'http://localhost:8000/images/product/nero-keychain.jpg',
                    name: 'Nero Keychain2',
                    price: '$ 5.00',
                }
            ]
        }
    }

    render(){
        return (
            <div>
            <div className="bg-primary pt-5" id="banner">
            <div className="container bg-transparent">
                <div className="row">
                    <div className="col-md-6 col-sm-12 text-white p-3">
                        <div className="h1">Nero Hobby Shop</div>
                        <p>Nero will fulfill your Hobby needs. Lets go shopping, umu !</p>
                        <div className="row">
                            <div className="col-4">
                                <a href="/react/shop" className="btn btn-outline-light form-control">Shop</a>
                            </div>
                            <div className="col-4">
                                <a href="/react/register" className="btn btn-light form-control">Register</a>
                            </div>
                        </div>
                    </div>
                    <div className="col-md-6 col-sm-12 text-center">
                        <img className="img-fluid" src="http://localhost:8000/images/nero-cute.png" alt="Nero-Cute" />
                    </div>
                </div>
            </div>
            </div>
            
            <div id="highlight">
                <div className="container">
                    <div className="lead m-5 text-center">
                        <h3>Nero Product</h3>
                    </div>
                    <div className="text px-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum culpa vero autem cum, assumenda sequi ullam blanditiis sunt aperiam corrupti. Sed praesentium voluptatum ratione quam fugit quas iste inventore omnis.
                    </div>
                    <div id="products">
                        <div className="container my-5">
                            <div className="row justify-content-center">
                                <button className="btn btn-outline-dark mx-2 active">Featured</button>
                                <button className="btn btn-outline-dark mx-2">On-Site</button>
                            </div>
                        </div>
                        <div className="container my-5">
                            <div className="row justify-content-center" id="product">
                                <div className="col-12 col-lg-10">
                                    <div className="row justify-content-center">
                                        {this.state.item.map(item => {
                                            return ( <ProductCard
                                                key={item.id}
                                                name={item.name}
                                                link={item.image}
                                                price={item.price}
                                            />
                                            )
                                        })}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        );
    }
}