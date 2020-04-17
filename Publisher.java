import java.util.ArrayList;
import java.util.Date;
import java.util.Scanner;

public class Publisher {

//Variables

	// name of publisher
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
	public Publisher(String name, int publisherId) {
		this.publisherName = name;
		this.publisherId = publisherId;

	}

//Methods

	// changes name of publisher
	public void editPublisherName(String publisherName) {
		this.publisherName = publisherName;
	}

	// changes id of publisher
	public void editPublisherId(int publisherId) {
		this.publisherId = publisherId;
	}

	// returns the info of a game
	public String viewGameDetails(Game game) {
		return game.toString();
	}

	// allows for the creation of a new game entry
	public Game makeGame(int gameId, String name, String genre, int genreTypeId, String publisher, int publisherId,
			Date releaseDate, String currentVersion, String websiteLink, String moreInfo,
			ArrayList<String> graphicList) {
		return new Game(gameId, name, genre, genreTypeId, publisher, publisherId, releaseDate, currentVersion, 0,
				websiteLink, moreInfo, graphicList);
	}

	// publisher is able to edit the parameters of a game
	@SuppressWarnings("deprecation")
	public void editGame(Game game) {
		System.out.println(
				"Enter the parameter of the game you wish to enter.\nChoose from gameId, name, publisher, publisherId,"
						+ "\nreleaseDate, currentVersion, genre, genreId, websiteLink, moreInfo, or graphicList.\nType \"exit\" "
						+ "to exit edit mode.");
		Scanner intInput = new Scanner(System.in);
		Scanner stringInput = new Scanner(System.in);

		String choice = stringInput.nextLine();

		while (choice != "exit") {
			switch (choice) {
			case "gameId":
				System.out.println("Input game Id.");
				game.gameId = intInput.nextInt();
				break;

			case "name":
				System.out.println("Input name.");
				game.name = stringInput.nextLine();
				break;

			case "publisher":
				System.out.println("Input publisher.");
				game.publisher = stringInput.nextLine();
				break;

			case "publisherId":
				System.out.println("Input publisher Id.");
				game.publisherId = intInput.nextInt();
				break;

			case "releaseDate":
				System.out.println(
						"Input release date. Enter three numbers representing the year, month (0-11) and day.");
				int[] dateNumbers = new int[3];
				for (int i = 0; i < 3; i++) {
					dateNumbers[i] = intInput.nextInt();
				}
				game.releaseDate = new Date(dateNumbers[0], dateNumbers[1], dateNumbers[2]);
				break;

			case "currentVersion":
				System.out.println("Input current game version.");
				game.currentVersion = stringInput.nextLine();
				break;

			case "genre":
				System.out.println("Input genre.");
				game.genre = stringInput.nextLine();
				break;

			case "genreId":
				System.out.println("Input genre type Id.");
				game.genreTypeId = intInput.nextInt();
				break;

			case "websiteLink":
				System.out.println("Input website link.");
				game.websiteLink = stringInput.nextLine();
				break;

			case "moreInfo":
				// note: later figure out a way to add to already present text
				System.out.println("Input additional info.");
				game.moreInfo = stringInput.nextLine();
				break;

			case "graphicList":
				// note for later: come back and add option to edit/remove entries
				System.out.println("Input link to image to add.");
				game.graphicList.add(stringInput.nextLine());
				break;
			case "exit":
				break;
			default:
				System.out.println("Invalid input.");
				break;
			}
			if (choice.equals("exit")) {
				break;
			}
			System.out.println("Enter another parameter to edit or type \"exit\" to exit edit mode.");
			choice = stringInput.next();
		}
		stringInput.close();
		intInput.close();
	}

	// function for publisher to post a game to the website
	// returns true if game was successfully uploaded to database,
	// false elsewise
	public boolean postGame(Game game) {
		return false;
	}

}
