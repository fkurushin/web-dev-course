import React from 'react';
import styles from './EventDetails.module.scss';


const EventDetails = ({ event }) => {
 return (
    <div className={styles['event-details']}>
      <h3>{event.title}</h3>
      <p>{event.description}</p>
      <p>{event.date}</p>
    </div>
 );
};

export default EventDetails;
