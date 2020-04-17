import java.util.ArrayList;
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
	// name of genre
	String genre;
	// link to website of game
	String websiteLink;
	// additional info on a game
	String moreInfo;
	// list of links to game screenshots
	ArrayList<String> graphicList;

	// release date of game
	Date releaseDate;

//Constructors

	// default constructor
	@SuppressWarnings("deprecation")
	public Game() {
		// variables that are int objects
		this.gameId = 0;
		this.publisherId = 0;
		this.genreTypeId = 0;
		this.rating = 0;

		// variables pertaining to string objects
		this.name = "";
		this.publisher = "";
		this.genre = "";
		this.currentVersion = "";
		this.websiteLink = "";
		this.moreInfo = "";
		this.graphicList = new ArrayList<String>();

		// variable pertaining to date object(s)
		this.releaseDate = new Date(2000, 0, 1);
	}

	// constructor of game allowing for input in its name, release data, publisher,
	// and current version
	public Game(int gameId, String name, String genre, int genreTypeId, String publisher, int publisherId,
			Date releaseDate, String currentVersion, int rating, String websiteLink, String moreInfo,
			ArrayList<String> graphicList) {
		this.gameId = gameId;
		this.publisherId = publisherId;
		this.genreTypeId = genreTypeId;
		this.rating = rating;

		this.name = name;
		this.publisher = publisher;
		this.genre = genre;
		this.currentVersion = currentVersion;
		this.websiteLink = websiteLink;
		this.moreInfo = moreInfo;
		this.graphicList = graphicList;

		this.releaseDate = releaseDate;
	}

// Methods

	@Override
	public String toString() {
		return "Game \nName: " + name + "\nGameId: " + gameId + "\nPublisher and Id: " + publisher + ", " + publisherId
				+ "\nRelease Date: " + releaseDate + "\nCurrent Version: " + currentVersion + "\nGenre and Id: " + genre
				+ ", " + genreTypeId + "\nWebsite Link: " + websiteLink + "\nGraphic List " + graphicList + "\nRating: "
				+ rating;
	}

}
