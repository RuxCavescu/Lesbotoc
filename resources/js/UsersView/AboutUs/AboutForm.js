import React, { useState } from 'react';
import axios from 'axios';
import  { useNavigate }  from 'react-router-dom';


export default function AboutForm(props){
    const navigate = useNavigate();
    const[formError, setFormError] = useState(null);
    const[success, setSuccess] = useState(null);

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

        setFormError(null);
        if(!data.name){
            setFormError('Please provide a name.');
            return
        }
        if(!data.email || (!data.email.includes("@"))  ){
            setFormError('Please provide a valid email.');
            return
        }
        if(!data.message){
            setFormError('Please provide a message.');
            return
        }

        const response = await axios.post(
            "/api/message/store", data
        );

        const responseData = response.data;
        console.log(response);

       
        if (response != null){  
            setSuccess("Thank you for contacting us");
            // navigate('/about-us');
            setTimeout(()=> {
                navigate('/');
                }, 2000);
        }       
    }

    
    return ( 
<div className="contact-form-container">

    <form action="" 
            onSubmit={(e)=>handleSubmit(e)} 
            method= "POST"
            className="contact-form">
         {success && <p className='success-message'>{success}</p>}
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
            htmlFor="email">Email address:</label>
        <input 
            onChange={(e)=>handleChange(e)}
            value={data.email}
            name="email"
            className="input-item" 
            type="text" 
            id="email"/>
        <label 
            className="loclabel" 
            htmlFor="phone">Phone number:</label>
        <input 
            onChange={(e)=>handleChange(e)}
            value={data.phone}
            name="phone"
            className="input-item" 
            type="text" 
            id="phone"/>
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
            <br />
           
            {formError && <p className='error-message'>{formError}</p>}
  
    </form>
</div>
     );
}
