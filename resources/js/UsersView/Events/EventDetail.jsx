import React, { useState, useEffect, useContext } from "react";
import { useParams } from "react-router-dom";

function EventDetail() {
    const [eventDetail, setEventDetail] = useState(null);

    const { id } = useParams();

    const loadEventDetails = async () => {
        const response = await fetch("/api/events/" + id);
        const responseData = await response.json();
        setEventDetail(responseData);
        console.log(responseData);
    };

    useEffect(() => {
        loadEventDetails();
    }, []);

    return (
        eventDetail && (
            <div className="detail__container">
                <div className="detail__description">
                    <h2 className="detail__title">Description</h2>
                    <p className="detail__text">{eventDetail.description_en}</p>
                </div>
                <div className="detail__box">
                    <p className="detail__boxtitle">
                        <span className="detail__boxtitle--bold">When:</span>{" "}
                        {eventDetail.start_date}
                    </p>
                    <p className="detail__boxtitle">
                        <span className="detail__boxtitle--bold">Where: </span>
                        {"   "}
                        {eventDetail.location.address}
                    </p>
                    <p className="detail__boxtitle">
                        <span className="detail__boxtitle--bold">Price:</span>
                        {"   "}
                        {eventDetail.price == null ? "Free" : eventDetail.price}
                    </p>
                    <p className="detail__boxtitle">
                        <span className="detail__boxtitle--bold">
                            Capacity:
                        </span>
                        {"   "}
                        {eventDetail.capacity == null
                            ? "Unlimited"
                            : eventDetail.capacity}
                    </p>
                    <button className="detail__button">REGISTER</button>
                </div>
                <div className="detail__description detail__description--wide">
                    <h2 className="detail__title">Instructions</h2>
                    <p className="detail__text">
                        {eventDetail.instructions_en}
                    </p>
                    <iframe
                        src={
                            "https://maps.google.com/maps?&q=" +
                            eventDetail.location.name +
                            " " +
                            eventDetail.location.address +
                            "&output=embed"
                        }
                        width="450"
                        height="270"
                        frameBorder="0"
                        style={{ border: "0" }}
                    ></iframe>
                </div>
                <div className="detail__description">
                    <h2 className="detail__title">Contact</h2>
                    <p className="detail__text">Marta + 420 777 777 777 </p>
                </div>
            </div>
        )
    );
}

export default EventDetail;

// Use following : name & address in q parameter
