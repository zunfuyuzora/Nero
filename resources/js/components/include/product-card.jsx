import React, {Component} from 'react';
import { Link } from 'react-router-dom';

export default class ProductCard extends Component {
    constructor(props){
        super(props);
    }

    render() {
        return (
            <div className="card">
                <div className="product-thumb">
                    <Link to={this.props.link}>
                    <img src={this.props.link} alt="Product Image" className="img-fluid" />
                    </Link>
                </div>
                <div className="card-body">
                    <h5>{this.props.name}</h5>
                    <p>{this.props.price}</p>
                </div>
            </div>
        )
    }
}