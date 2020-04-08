import java.util.Arrays;
import java.util.Date;

public class Game {

//Variables

	// id number of game
	int gameId;
	// publisher id number
	int publisherId;
	// genre id number
	int genreTypeId;
	// numerical rating for game
	int rating;

	// name of game
	String name;
	// current version of game application
	String currentVersion;
	// publisher of game
	String publisher;
	// link to website of game
	String websiteLink;
	// list of graphics used
	String graphicList;

	// release date of game
	Date releaseDate;

//Constructors

	// default constructor
	public Game() {
		this.gameId = 0;
		this.publisherId = 0;
		this.genreTypeId = 0;
		this.rating = 0;

		this.name = "";
		this.currentVersion = "";
		this.websiteLink = "";
		this.graphicList = "";

		this.releaseDate = null;
	}

	// constructor of game allowing for input in its name, release data, publisher,
	// and current version
	public Game(String name, Date releaseDate, String publisher, String currentVersion) {

	}

//Methods

	public Arrays viewComments() {
		return null;
	}

	public Arrays viewRatings() {
		return null;
	}

	public Arrays viewReviews() {
		return null;
	}

	public String moreInfo() {
		return null;
	}

}
