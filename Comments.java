
public class Comments {

//Variables

	// instance variables
	// comment id
	public int commentId;
	// review id
	public int reviewId;
	// user id
	public int userId;
	// input text
	public String text;

//Constructors

	// default constructor
	public Comments() {
		this.commentId = 0;
		this.reviewId = 0;
		this.userId = 0;
		this.text = "";
	}

	// constructor text for the comment as input
	public Comments(String text) {
		this.text = text;
	}

//Methods 

	// returns true if comment successfully posted,
	// false elsewise
	public boolean postComment(String text) {
		return false;
	}

	// input: commentId needed to find particular comment and text for
	// replacing the comment with new desired text
	public void editComment(int commentId, String text) {

	}

}
