<?php

declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use Nawarian\Raylib\Types\{
    Camera3D,
    Color,
    Vector2,
    Vector3,
};

const MAX_COLUMNS = 20;

// Initialization
//--------------------------------------------------------------------------------------
$screenWidth = 800;
$screenHeight = 450;

\Nawarian\Raylib\InitWindow($screenWidth, $screenHeight, "raylib [core] example - 3d camera first person");

// Define the camera to look into our 3d world (position, target, up vector)
$camera = new Camera3D(
    new Vector3(4.0, 2.0, 4.0),
    new Vector3(0.0, 1.8, 0.0),
    new Vector3(0.0, 1.0, 0.0),
    60.0,
    Camera3D::PROJECTION_PERSPECTIVE,
);

// Generates some random columns
$heights = [];
$positions = [];
$colors = [];

for ($i = 0; $i < MAX_COLUMNS; $i++) {
    $heights[$i] = (float) \Nawarian\Raylib\GetRandomValue(1, 12);
    $positions[$i] = new Vector3(
        \Nawarian\Raylib\GetRandomValue(-15, 15),
        $heights[$i] / 2.0,
        \Nawarian\Raylib\GetRandomValue(-15, 15),
    );

    $colors[$i] = new Color(\Nawarian\Raylib\GetRandomValue(20, 255), \Nawarian\Raylib\GetRandomValue(10, 55), 30, 255);
}

\Nawarian\Raylib\SetCameraMode($camera, Camera3D::MODE_FIRST_PERSON); // Set a first person camera mode

\Nawarian\Raylib\SetTargetFPS(60);                           // Set our game to run at 60 frames-per-second
//--------------------------------------------------------------------------------------

// Main game loop
while (!\Nawarian\Raylib\WindowShouldClose()) {               // Detect window close button or ESC key
    // Update
    //----------------------------------------------------------------------------------
    \Nawarian\Raylib\UpdateCamera($camera);                  // Update camera
    //----------------------------------------------------------------------------------

    // Draw
    //----------------------------------------------------------------------------------
    \Nawarian\Raylib\BeginDrawing();

        \Nawarian\Raylib\ClearBackground(Color::rayWhite());

        // phpcs:disable Generic.WhiteSpace.ScopeIndent.IncorrectExact
        \Nawarian\Raylib\BeginMode3D($camera);

            \Nawarian\Raylib\DrawPlane(new Vector3(0.0, 0.0, 0.0), new Vector2(32.0, 32.0), Color::lightGray()); // Draw ground
            \Nawarian\Raylib\DrawCube(new Vector3(-16.0, 2.5, 0.0), 1.0, 5.0, 32.0, Color::blue());     // Draw a blue wall
            \Nawarian\Raylib\DrawCube(new Vector3(16.0, 2.5, 0.0), 1.0, 5.0, 32.0, Color::lime());      // Draw a green wall
            \Nawarian\Raylib\DrawCube(new Vector3(0.0, 2.5, 16.0), 32.0, 5.0, 1.0, Color::gold());      // Draw a yellow wall

            // Draw some cubes around
            for ($i = 0; $i < MAX_COLUMNS; $i++) {
                \Nawarian\Raylib\DrawCube($positions[$i], 2.0, $heights[$i], 2.0, $colors[$i]);
                \Nawarian\Raylib\DrawCubeWires($positions[$i], 2.0, $heights[$i], 2.0, Color::maroon());
            }

        \Nawarian\Raylib\EndMode3D();
        // phpcs:enable Generic.WhiteSpace.ScopeIndent.IncorrectExact

        \Nawarian\Raylib\DrawRectangle(10, 10, 220, 70, \Nawarian\Raylib\Fade(Color::skyBlue(), 0.5));
        \Nawarian\Raylib\DrawRectangleLines(10, 10, 220, 70, Color::blue());

        \Nawarian\Raylib\DrawText("First person camera default controls:", 20, 20, 10, Color::black());
        \Nawarian\Raylib\DrawText("- Move with keys: W, A, S, D", 40, 40, 10, Color::darkGray());
        \Nawarian\Raylib\DrawText("- Mouse move to look around", 40, 60, 10, Color::darkGray());

    \Nawarian\Raylib\EndDrawing();
    //----------------------------------------------------------------------------------
}

// De-Initialization
//--------------------------------------------------------------------------------------
\Nawarian\Raylib\CloseWindow();        // Close window and OpenGL context
//--------------------------------------------------------------------------------------
