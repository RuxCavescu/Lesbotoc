import React, { useState, useEffect } from "react";
import axios from "axios";

function Modal({
    title,
    displayModal,
    setDisplayModal,
    onClick,
    eventId,
    date,
}) {
    const [values, setValues] = useState({
        name: "",
        email: "",
        phone: "",
        event_id: eventId,
        event_name: title,
        event_date: date,
        contact_id: 1,
        auth_token: "auth",
        is_confirmed: 0,
        // message: "",
    });

    const handleChange = (event) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [event.target.name]: event.target.value,
            };
        });
    };

    const handleSubmit = async (e) => {
        e.preventDefault();
        console.log(values);
        const response = await axios.post("/api/registration/store", values);
        const responseData = response.data;
        console.log(responseData);
    };

    return (
        <div
            className="modal myModal"
            style={{ display: displayModal }}
            onClick={(e) => {
                if (e.target == e.currentTarget) {
                    setDisplayModal("none");
                }
            }}
        >
            <div className="modal__content">
                <div className="modal__title modal__title--small">
                    <h1 className="modal__headline">Register for {title}</h1>
                    <span
                        onClick={() => {
                            setDisplayModal("none");
                        }}
                        className="modal__close"
                    >
                        &times;
                    </span>
                </div>
                <div className="modal__main">
                    <form
                        className="events__form events__form--transparent"
                        action=""
                        method="post"
                        onSubmit={handleSubmit}
                    >
                        {/* <input type="hidden" name="event_id" value={eventId} />
                        <input type="hidden" name="contact_id" value="1" />
                        <input type="hidden" name="is_confirmed" value="0" />
                        <input type="hidden" name="auth_token" value="auth" /> */}
                        <label
                            className="events__label events__label--full"
                            htmlFor="name"
                        >
                            Your name *
                            <input
                                className="events__input"
                                type="text"
                                id="name"
                                name="name"
                                onChange={handleChange}
                                value={values.name}
                            />
                        </label>

                        <div className="events__common">
                            <label
                                className="events__label events__label--half"
                                htmlFor="email"
                            >
                                Your email *
                                <input
                                    className="events__input"
                                    type="email"
                                    id="email"
                                    name="email"
                                    onChange={handleChange}
                                    value={values.email}
                                />
                            </label>
                            <label
                                className="events__label events__label--half"
                                htmlFor="phone"
                            >
                                Phone number *
                                <input
                                    className="events__input"
                                    type="phone"
                                    id="phone"
                                    name="phone"
                                    value={values.phone}
                                    onChange={handleChange}
                                />
                            </label>
                        </div>

                        {/* <label
                            className="events__label events__label--full"
                            htmlFor="message"
                        >
                            Your Message
                            <textarea
                                className="events__textarea events__textarea--full"
                                id="message"
                                name="message"
                                onChange={handleChange}
                                value={values.message}
                            ></textarea>
                        </label> */}

                        <button className="detail__button modal_btn">
                            REGISTER
                        </button>
                    </form>
                </div>
            </div>
        </div>
    );
}

export default Modal;
