/**
 * AdminController
 *
 * @module		:: Controller
 * @description	:: Contains logic for handling requests.
 */

module.exports = {

  /* e.g.
  sayHello: function (req, res) {
    res.send('hello world!');
  }
  */

	login: function (req,res) {
		res.view();
	},
 
	process: function(req, res) {
		

	},
 
	logout: function (req,res) {
		req.logout();
		res.redirect('/');
	},

	users: function(req, res) {

		res.view();
	}
  

};
