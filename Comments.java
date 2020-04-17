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
		
		public Comments(int commentId, int reviewId, int userId, String text) {
			this.commentId = commentId;
			this.reviewId = reviewId;
			this.userId = userId;
			this.text = text; 
		}

	//Methods 
		
		public int getCommentId() {
			return this.commentId;
		}
		
		public int getReviewId() {
			return this.reviewId;
		}
		
		public int getUserId() {
			return this.userId;
		}
		
		public String getText() {
			return this.text;
		}


		// input: commentId needed to find particular comment and text for
		// replacing the comment with new desired text
		// only setter of the group as the user should not be able to 
		// 		1. change which user user posted the comment
		//		2. change which game the comment was for
		//		3. change the review that the comment belongs to
		public void editComment(String text) {
			this.text = text;
		}
		
		public String toString() {
			String s = "id: " + this.commentId + " reviewId: " + this.reviewId + " userId: " + this.userId + " comment: " + this.text;
			return s;
		}
}
