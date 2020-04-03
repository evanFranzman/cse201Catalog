package gameCatalog;

import java.util.Date;

public class Review {

	Game game = null;
	Date date = null;
	int numReplies;
	String content;
	int numUpvoted;
	int numDownvoted;
	
	public Review(Game game, Date date, int numReplies, String content, int numUpvoted, int numDownvoted) {
		this.game = game;
		this.date = date;
		this.numReplies = numReplies;
		this.content = content;
		this.numUpvoted = numUpvoted;
		this.numDownvoted = numDownvoted;
	}

	public Game getGame() {
		return game;
	}

	public void setGame(Game game) {
		this.game = game;
	}

	public Date getDate() {
		return date;
	}

	public void setDate(Date date) {
		this.date = date;
	}

	public int getNumReplies() {
		return numReplies;
	}

	public void setNumReplies(int numReplies) {
		this.numReplies = numReplies;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public int getNumUpvoted() {
		return numUpvoted;
	}

	public void setNumUpvoted(int numUpvoted) {
		this.numUpvoted = numUpvoted;
	}

	public int getNumDownvoted() {
		return numDownvoted;
	}

	public void setNumDownvoted(int numDownvoted) {
		this.numDownvoted = numDownvoted;
	}
	
	
}
