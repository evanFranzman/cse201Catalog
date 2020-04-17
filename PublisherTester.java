import static org.junit.Assert.*;

import java.util.ArrayList;
import java.util.Date;

import org.junit.Test;

//testing class
//supressing warning is for getting around java data being old
//and not currently figuring out how to use Calendar.set()
//*insert shrug unicode here*
@SuppressWarnings("deprecation")
public class PublisherTester {

	@Test
	public void testConstructors() {
		// testing default constructor
		Publisher tester = new Publisher();
		assertEquals(tester.publisherName, "");
		assertEquals(tester.publisherId, 0);

		// testing user input constructor
		tester.editPublisherName("Konami");
		tester.editPublisherId(1);
		assertTrue(tester.publisherName.equals("Konami"));
		assertEquals(tester.publisherId, 1);

	}

	@Test
	public void testEditPublisherName() {
		Publisher tester = new Publisher();

		// testing user input
		assertFalse(tester.publisherName.equals("Sony"));
		tester.editPublisherName("Sony");
		assertTrue(tester.publisherName.equals("Sony"));

	}

	@Test
	public void testEditPublisherId() {
		// testing user unique input
		Publisher tester = new Publisher();
		assertNotEquals(tester.publisherId, 1);
		tester.editPublisherId(1);
		assertEquals(tester.publisherId, 1);
	}

	@Test
	public void testViewGameDetails() {
		// testing default value
		Game test1 = new Game();
		String compare = "Game \n" + "Name: \n" + "GameId: 0\n" + "Publisher and Id: , 0\n" + "Release Date: "
				+ new Date(2000, 0, 1) + "\n" + "Current Version: \n" + "Genre and Id: , 0\n" + "Website Link: \n"
				+ "Graphic List []\n" + "Rating: 0";
		assertTrue(test1.toString().equals(compare));
	}

	@Test
	public void testMakeGame() {
		Publisher tester = new Publisher();

		// test game
		// testing input parameters
		Game test1 = tester.makeGame(0, "Sonic Rush", "Platformer", 0, "Sega", 0, new Date(2005, 10, 15), "1.0",
				"http://sonic.sega.jp/rush/", "boost game", new ArrayList<String>());

		// testing for correct parameters // should be these values
		assertEquals(test1.gameId, 0);
		assertEquals(test1.name, "Sonic Rush");
		assertEquals(test1.genre, "Platformer");
		assertEquals(test1.genreTypeId, 0);
		assertEquals(test1.publisher, "Sega");
		assertEquals(test1.publisherId, 0);
		assertEquals(test1.releaseDate, new Date(2005, 10, 15));
		assertEquals(test1.currentVersion, "1.0");
		assertEquals(test1.rating, 0);
		assertEquals(test1.websiteLink, "http://sonic.sega.jp/rush/");
		assertEquals(test1.moreInfo, "boost game");
		assertEquals(test1.graphicList.size(), 0);

		// shouldn't be these values assertNotEquals(test1.gameId, 10);
		assertNotEquals(test1.name, "Sonic Rush Adventure");
		assertNotEquals(test1.genre, "JRPG");
		assertNotEquals(test1.genreTypeId, -1);
		assertNotEquals(test1.publisher, "Nintendo");
		assertNotEquals(test1.publisherId, 999);
		assertNotEquals(test1.releaseDate, new Date(2000, 5, 16));
		assertNotEquals(test1.currentVersion, "3.9.1");
		assertNotEquals(test1.rating, 9);
		assertNotEquals(test1.websiteLink, "https://www.youtube.com/watch?v=dQw4w9WgXcQ");
		assertNotEquals(test1.moreInfo, "mario game");
		assertNotEquals(test1.graphicList.size(), 1);
	}

	@Test
	public void testEditGame() {
		Publisher tester = new Publisher();
		Game test1 = tester.makeGame(0, "Kingdom Hearts 358/2 Days", "JRPG", 0, "Square Enix", 0, new Date(2009, 4, 30),
				"1.0", "http://www.square-enix.co.jp/kingdom/days/", "title name does not make sense",
				new ArrayList<String>());

//		// testing editing various
//		// editing gameId
//		assertEquals(test1.gameId, 0);
//		tester.editGame(test1);
//		assertEquals(test1.gameId, 1);
//
//		// editing name
//		assertTrue(test1.name.equals("Kingdom Hearts 358/2 Days"));
//		tester.editGame(test1);
//		assertTrue(test1.name.equals("Kingdom Hearts II Final Mix"));
//
//		// editing publisher
//		assertTrue(test1.publisher.equals("Square Enix"));
//		tester.editGame(test1);
//		assertTrue(test1.publisher.equals("SQUARE ENIX"));
//
//		// editing publisherId
//		assertEquals(test1.publisherId, 0);
//		tester.editGame(test1);
//		assertEquals(test1.publisherId, 1);
//
//		// editing releaseDate
//		assertEquals(test1.releaseDate, new Date(2009, 4, 30));
//		tester.editGame(test1);
//		assertEquals(test1.releaseDate, new Date(2007, 2, 29));
//
//		// editing current version
//		assertTrue(test1.currentVersion.equals("1.0"));
//		tester.editGame(test1);
//		assertTrue(test1.currentVersion.equals("2.0"));
//
//		// editing genre
//		assertTrue(test1.genre.equals("JRPG"));
//		tester.editGame(test1);
//		assertTrue(test1.genre.equals("Action RPG"));
//
//		// editing genreTypeId
//		assertEquals(test1.genreTypeId, 0);
//		tester.editGame(test1);
//		assertEquals(test1.genreTypeId, 1);
//
//		// editing website link
//		assertTrue(test1.websiteLink.equals("http://www.square-enix.co.jp/kingdom/days/"));
//		tester.editGame(test1);
//		assertTrue(test1.websiteLink.equals("http://www.square-enix.co.jp/kingdom2fm/"));
//
//		// editing more info
//		assertTrue(test1.moreInfo.equals("title name does not make sense"));
//		tester.editGame(test1);
//		assertTrue(test1.moreInfo.equals("shorter title name"));
//
//		// editing graphics links
//		assertTrue(test1.graphicList.size() == 0);
//		tester.editGame(test1);
//		assertTrue(test1.graphicList.size() == 1);
	}

}
