import java.util.Arrays;

public class User {

//Variables

	int userId;
	String firstName;
	String lastName;

//Constructors

	// default constructor
	public User() {
		this.userId = 0;

		this.firstName = "";
		this.lastName = "";
	}

	// constructor taking two inputs
	public User(String firstName, String lastName) {
		this.firstName = firstName;
		this.lastName = lastName;
	}

//Methods

	public void reviewGame(Game game) {

	}

	public void rateGame(Game game) {

	}

	public void comment(Game game) {

	}

	public boolean submitForm() {
		return false;
	}

	public Arrays viewGames() {
		return null;
	}

	public Arrays viewComments() {
		return null;
	}

	public Arrays viewRatings() {
		return null;
	}

	public Arrays viewReviews() {
		return null;
	}
}
