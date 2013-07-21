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
		passport.authenticate('local', function(err, user, info) {
			if ((err) || (!user)) {
				res.redirect('/admin/login');
				return;
			}
 
			req.logIn(user, function(err) {
				if (err)
				{
					res.view();
					return;
				}
				
				res.redirect('/');
				return;
			});
		})(req, res);
	},
 
	logout: function (req,res) {
		req.logout();
		res.redirect('/');
	}
  

};
