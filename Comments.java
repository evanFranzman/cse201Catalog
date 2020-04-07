
public class Comments {

	// instance variables
	// comment id
	public int commentId;
	// review id
	public int reviewId;
	// user id
	public String userId;
	// input text
	public String text;

	public Comments() {
		commentId = 0;
		reviewId = 0;
		userId = "";
		text = "";
	}

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
