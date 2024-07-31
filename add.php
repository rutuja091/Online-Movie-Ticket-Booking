<div class="container">
        <form id="add-movie-form">
            <h2>Add a Movie</h2>
            <div class="form-group">
                <label for="movie-image">Movie Image</label>
                <input type="file" id="movie-image" name="movie-image" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="movie-name">Movie Name</label>
                <input type="text" id="movie-name" name="movie-name" required>
            </div>
            <div class="form-group">
                <label for="movie-description">Movie Description</label>
                <textarea id="movie-description" name="movie-description" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="ticket-price">Ticket Price</label>
                <input type="number" id="ticket-price" name="ticket-price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="show-time">Show Time</label>
                <input type="datetime-local" id="show-time" name="show-time" required>
            </div>
            <button type="submit">Add Movie</button>
        </form>
    </div>