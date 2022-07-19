import React from "react";

const Calendar = () => {
    return (
        <iframe
            src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23142566&ctz=Europe%2FPrague&src=Y19zYThwaW8zOGlyamUwZTlxajJoMHQwbG1mZ0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&color=%23E67C73"
            style={{
                color: "white",
                border: "solid 1px #777",
                width: "800px",
                height: "600px",
                frameBorder: "0",
            }}
            scrolling="no"
        ></iframe>
    );
};

export default Calendar;
