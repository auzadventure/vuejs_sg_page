/**
 * @author Allan A. Chua
 * @since June 16, 2018
 * 
 */
import axios from 'axios';

export default {
    /**
     * Method used for retrieving the data from
     * remote sources using AJAX.
     * 
     * @param apiURL URL of resource to retrieve.
     * 
     * @returns {Promise} Promise object that would return requested resource.
     */
    executeGet: apiURL => axios.get(apiURL)
};