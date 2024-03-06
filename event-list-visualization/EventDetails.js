import React from 'react';

const EventDetails = ({ event }) => {
 return (
    <div className="event-details">
      <h3>{event.title}</h3>
      <p>{event.description}</p>
      <p>{event.date}</p>
    </div>
 );
};

export default EventDetails;
