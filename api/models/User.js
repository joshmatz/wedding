/**
 * User
 *
 * @module      :: Model
 * @description :: A short summary of how this model works and what it represents.
 *
 */

module.exports = {

  attributes: {
  	
  	/* e.g.
  	nickname: 'string'
  	*/

  	username: {
  		type: 'string',
  		required: true
  	},
  	email: {
  		type: 'email',
    	required: true
  	},
  	password: {
  		type: 'string',
  		required: true
  	}
    
  }

};
