
public class Publisher {

//Variables

	public String publisherName;
	// numerical id of publisher
	public int publisherId;

//Constructors 

	// default constructor
	public Publisher() {
		this.publisherName = "";
		this.publisherId = 0;
	}

	// constructor that takes name for publisher as input
	public Publisher(String name) {
		this.publisherName = name;
	}

//Methods

	// publisher is able to edit the parameters of a game
	public void editGame(Game game) {

	}

	// function for publisher to post a game to the website
	// returns true if game was successfully uploaded to database,
	// false elsewise
	public boolean postGame(Game game) {
		return false;
	}

}
