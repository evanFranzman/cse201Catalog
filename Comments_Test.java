import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

class Comments_Test {

	@Test
	void commentsTest() {
		// public Comments(int commentId, int reviewId, int userId, String text)
		Comments c = new Comments(1,2,3,"This game stinks");
		assertEquals(c.commentId, 1);
		assertEquals(c.reviewId, 2);
		assertEquals(c.userId, 3);
		assertEquals(c.text, "This game stinks");
	}
	
	@Test
	void getCommentIdTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		assertTrue(c.getCommentId() == 1);
		assertFalse(c.getCommentId() == 0);
	}
	
	@Test
	void getReviewIdTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		assertTrue(c.getReviewId() == 2);
		assertFalse(c.getReviewId() == 0);
	}
	
	@Test
	void getUserIdTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		assertTrue(c.getUserId() == 3);
		assertFalse(c.getUserId() == 4);
	}
	
	@Test 
	void getTextTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		assertTrue(c.getText().equals("This game stinks"));
		assertEquals(c.getText(), "This game stinks");
		assertFalse(c.getText() == "");
	}
	
	@Test
	void editTextTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		c.editComment("jk it's good!");
		assertTrue(c.getText().equals("jk it's good!"));
		assertFalse(c.getText().equals("This game stinks"));
	}
	
	@Test
	void toStringTest() {
		Comments c = new Comments(1,2,3,"This game stinks");
		assertTrue(c.toString().equals("id: 1 reviewId: 2 userId: 3 comment: This game stinks"));
		assertFalse(c.toString().equals("This game stinks"));
	}

}
