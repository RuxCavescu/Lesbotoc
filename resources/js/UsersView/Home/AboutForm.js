import React, { useState } from 'react';
import axios from 'axios';

export default function AboutForm(props){

    const [data, setData] = useState({
        name: "",
        email: "",
        phone: "", 
        message: ""
    })

    const handleChange = (e) => {
        const { name, value } = e.target;
        setData((prevState) => {
            return {
                ...prevState,
                [name] : value,
            };
        });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();

        const response = await axios.post(
            "/api/message/store", data
        );

        const responseData = response.data;
        console.log(response);
        
    }

    
    return ( 
<div className="contact-form-container">

    <form action="" 
            onSubmit={(e)=>handleSubmit(e)} 
            method= "POST"
            className="contact-form">
        <label 
            className="loclabel" 
            htmlFor="name">Name:</label>
        <input 
            onChange={(e)=>handleChange(e)}
            value={data.name}
            name="name"
            className="input-item" 
            type="text" 
            id="name"/> <br />
        <label 
            className="loclabel" 
            htmlFor="email_address">Email address:</label>
        <input 
            onChange={(e)=>handleChange(e)}
            value={data.email}
            name="email"
            className="input-item" 
            type="text" 
            id="email" />
        <label 
            className="loclabel" 
            htmlFor="phone_number">Phone number:</label>
        <input 
            onChange={(e)=>handleChange(e)}
            value={data.phone}
            name="phone"
            className="input-item" 
            type="text" 
            id="phone_number"/>
        <label 
            className="loclabel" 
            htmlFor="message">Your message:</label>
        <textarea 
            onChange={(e)=>handleChange(e)}
            value={data.message}
            className="input-item" 
            name="message" 
            id="message" 
            cols="30" 
            rows="7" 
            placeholder="Write your message here..."></textarea>
            <br />
        <button className="input-button">Submit</button>
    </form>


</div>
     );
}
