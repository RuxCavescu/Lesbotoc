import React, { useState, useEffect, useContext } from "react";
import { useParams } from "react-router-dom";
import Hero from "../Home/Hero";
import Modal from "./Modal";
import Moment from "moment";

function EventDetail() {
    const [eventDetail, setEventDetail] = useState(null);

    const { id } = useParams();

    const loadEventDetails = async () => {
        try {
            const response = await fetch("/api/events/" + id);
            const responseData = await response.json();
            setEventDetail(responseData);
            console.log(responseData);
        } catch (error) {
            console.log(error.response.data);
        }
    };

    // Modal window handling

    const [displayModal, setDisplayModal] = useState("none");

    const handleClick = () => {
        console.log("clicked");
        if (displayModal === "none") {
            setDisplayModal("block");
        }
    };

    useEffect(() => {
        loadEventDetails();
        const modal = document.querySelector(".modal");
    }, []);

    return (
        eventDetail && (
            <>
                <Modal
                    title={eventDetail.title_en}
                    displayModal={displayModal}
                    setDisplayModal={setDisplayModal}
                    eventId={eventDetail.id}
                    date={eventDetail.start_date}
                    phoneRequired={eventDetail.is_phone_required}
                />
                <Hero
                    className="detail__hero"
                    path={eventDetail.image.path}
                    text={eventDetail.title_en}
                    startDate={eventDetail.start_date}
                    place={eventDetail.location.name}
                    address={eventDetail.location.address}
                    price={
                        eventDetail.price === null ? "Free" : eventDetail.price
                    }
                    position="center"
                />
                <div className="detail__container">
                    <div className="detail__description">
                        <h2 className="detail__title">Description</h2>
                        <p className="detail__text">
                            {eventDetail.description_en}
                        </p>
                    </div>

                    <div
                        className={
                            eventDetail.capacity >
                                eventDetail.already_registered ||
                            eventDetail.capacity == null
                                ? "detail__box"
                                : "detail__box detail__box--grey"
                        }
                    >
                        <p className="detail__boxtitle">
                            <span className="detail__boxtitle--bold">
                                When:
                            </span>{" "}
                            {Moment(eventDetail.start_date).format(
                                "Do MMMM YYYY"
                            )}
                        </p>
                        <p className="detail__boxtitle">
                            <span className="detail__boxtitle--bold">
                                Where:{" "}
                            </span>
                            {"   "}
                            {eventDetail.location.address}
                        </p>
                        <p className="detail__boxtitle">
                            <span className="detail__boxtitle--bold">
                                Price:
                            </span>
                            {"   "}
                            {eventDetail.price == null
                                ? "Free"
                                : eventDetail.price}
                        </p>

                        {eventDetail.capacity == null ? (
                            <p className="detail__boxtitle">
                                <span className="detail__boxtitle--bold">
                                    Capacity:
                                </span>
                                {"   "}
                                {eventDetail.capacity == null
                                    ? "Unlimited"
                                    : eventDetail.capacity}
                            </p>
                        ) : eventDetail.capacity >
                          eventDetail.already_registered ? (
                            <p className="detail__boxtitle">
                                <span className="detail__boxtitle--bold">
                                    Available spots :
                                </span>
                                {"   "}
                                {eventDetail.capacity -
                                    eventDetail.already_registered}{" "}
                                / {eventDetail.capacity}
                            </p>
                        ) : (
                            <p className="detail__boxtitle">
                                <span className="detail__boxtitle--bold">
                                    Available spots :
                                </span>
                                {"   "}0 / {eventDetail.capacity}
                            </p>
                        )}

                        {/* <p className="detail__boxtitle">
                            <span className="detail__boxtitle--bold">
                                Capacity:
                            </span>
                            {"   "}
                            {eventDetail.capacity == null
                                ? "Unlimited"
                                : eventDetail.capacity}
                        </p> */}

                        {eventDetail.capacity >
                            eventDetail.already_registered ||
                        eventDetail.capacity == null ? (
                            <button
                                onClick={handleClick}
                                className="detail__button"
                            >
                                REGISTER
                            </button>
                        ) : (
                            <p className="detail__boxtitle detail__boxtitle--centered">
                                Registrations are closed
                            </p>
                        )}
                    </div>
                    <div className="detail__description detail__description--wide">
                        <h2 className="detail__title">Instructions</h2>
                        <p className="detail__text">
                            {eventDetail.instructions_en}
                        </p>
                        <iframe
                            className="detail__map"
                            src={
                                "https://maps.google.com/maps?&q=" +
                                eventDetail.location.name +
                                " " +
                                eventDetail.location.address +
                                "&output=embed"
                            }
                            // width="450"
                            // height="270"
                            frameBorder="0"
                            style={{ border: "0" }}
                        ></iframe>
                    </div>
                    <div className="detail__description">
                        <h2 className="detail__title">Contact</h2>
                        <p className="detail__text">Marta + 420 777 777 777 </p>
                    </div>
                </div>
            </>
        )
    );
}

export default EventDetail;

// Use following : name & address in q parameter
