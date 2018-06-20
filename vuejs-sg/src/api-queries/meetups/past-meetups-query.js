/**
 * @author Allan A. Chua
 * @since June 16, 2018
 * 
 */
import baseQuery from '../base-query.js';

const apiURL = `http://api.meetup.com/Vue-JS-Singapore/events?&page=3&desc=true&status=past`;

export default {
    /**
     * Method used for retrieving the past 
     * three meetups for VueJS singapore.
     * 
     * @returns {Promise} Promise object that would return list of past meetups.
     */
    execute: () => baseQuery.executeGet(apiURL)
};