<statements>
    <statement name="getShows" paramTypes="%s">
        <![CDATA[ SELECT * FROM shows WHERE catId = ?; ]]>
    </statement>

    <statement name="getAllShows">
        <![CDATA[ SELECT * FROM shows; ]]>
    </statement>

    <statement name="getFavoriteShows">
        <![CDATA[ SELECT * FROM shows WHERE userFavorite = 'true'; ]]>
    </statement>

    <statement name="changeFavoriteShow" paramTypes="%s||%s">
        <![CDATA[ UPDATE shows SET userFavorite = ? WHERE showId = ?; ]]>
    </statement>

    <statement name="getSeasons">
        <![CDATA[ SELECT * FROM seasons; ]]>
    </statement>

    <statement name="getVideos">
        <![CDATA[ SELECT * FROM videos; ]]>
    </statement>

    <statement name="getVideosByCatId" paramTypes="%s">
        <![CDATA[ SELECT * FROM videos WHERE catId = ?; ]]>
    </statement>

    <statement name="getVideo" paramTypes="%s">
        <![CDATA[ SELECT * FROM videos WHERE videoId = ?; ]]>
    </statement>

    <statement name="getCategories">
        <![CDATA[ SELECT * FROM categories; ]]>
    </statement>
</statements>