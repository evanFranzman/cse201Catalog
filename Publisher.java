
public class Publisher {

	// instance variables
	// name of publisher
	public String publisherName;
	// numerical id of publisher
	public int publisherId;

	// default constructor
	public Publisher() {
		publisherName = "";
		publisherId = 0;
	}

	// publisher is able to edit the parameters of a game
	public void editGame(/* Game game */) {

	}

	// function for publisher to post a game to the website
	// returns true if game was successfully uploaded to database,
	// false elsewise
	public boolean postGame(/* Game game */) {
		return false;
	}

}
