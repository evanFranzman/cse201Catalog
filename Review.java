package gameCatalog;

import java.util.Date;

public class Review {
	String content;
	Game game = null;
	Date date = null;
	int replies;
	
	public Review(String content, Game game, Date date, int replies) {
		this.content = content;
		this.game = game;
		this.date = date;
		this.replies = replies;
	}

	public String getContent() {
		return content;
	}

	public void setContent(String content) {
		this.content = content;
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

	public int getReplies() {
		return replies;
	}

	public void setReplies(int replies) {
		this.replies = replies;
	}
	
	
}
