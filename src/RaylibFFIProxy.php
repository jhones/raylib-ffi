<?php

declare(strict_types=1);

namespace Nawarian\Raylib;

use FFI;
use FFI\CData;

/**
 * @phpcs:disable Generic.Files.LineLength.TooLong
 * @method CData new(string $type)
 * @method void BeginBlendMode(int $mode)
 * @method void BeginDrawing()
 * @method void BeginMode2D(CData $camera2D)
 * @method void BeginMode3D(CData $camera3D)
 * @method void BeginScissorMode(int $x, int $y, int $width, int $height)
 * @method bool CheckCollisionPointRec(CData $point, CData $rec)
 * @method bool CheckCollisionRayBox(CData $ray, CData $box)
 * @method bool CheckCollisionRecs(CData $rec1, CData $rec2)
 * @method void ClearBackground(CData $color)
 * @method void CloseAudioDevice()
 * @method void CloseWindow()
 * @method CData ColorAlpha(CData $color, float $alpha)
 * @method void DrawCircle(int $centerX, int $centerY, float $radius, CData $color)
 * @method void DrawCircleGradient(int $centerX, int $centerY, float $radius, CData $color1, CData $color2)
 * @method void DrawCircleLines(int $centerX, int $centerY, float $radius, CData $color)
 * @method void DrawCircleV(CData $center, float $radius, CData $color)
 * @method void DrawCube(CData $position, float $width, float $height, float $length, CData $color)
 * @method void DrawCubeWires(CData $position, float $width, float $height, float $length, CData $color)
 * @method void DrawFPS(int $posX, int $posY)
 * @method void DrawGrid(int $slices, float $spacing)
 * @method void DrawLine(int $x0, int $y0, int $x1, int $y1, CData $color)
 * @method void DrawPlane(CData $center, CData $size, CData $color)
 * @method void DrawPoly(CData $center, int $sides, float $radius, float $rotation, CData $color)
 * @method void DrawRay(CData $ray, CData $color)
 * @method void DrawRectangle(float $x, float $y, float $width, float $height, CData $color)
 * @method void DrawRectangleGradientH(float $x, float $y, float $width, float $height, CData $color1, CData $color2)
 * @method void DrawRectangleLines(float $x, float $y, float $width, float $height, CData $color)
 * @method void DrawRectangleLinesEx(CData $rectangle, int $lineThick, CData $color)
 * @method void DrawRectangleRec(CData $rectangle, CData $color)
 * @method void DrawText(string $text, int $x, int $y, int $fontSize, CData $color)
 * @method void DrawTexture(CData $texture, int $posX, int $posY, CData $tint)
 * @method void DrawTextureEx(CData $texture, CData $position, float $rotation, float $scale, CData $tint)
 * @method void DrawTexturePro(CData $texture, CData $source, CData $dest, CData $origin, float $rotation, CData $tint)
 * @method void DrawTextureTiled(CData $texture, CData $source, CData $dest, CData $origin, float $rotation, float $scale, CData $tint)
 * @method void DrawTriangle(CData $vec1, CData $vec2, CData $vec3, CData $color)
 * @method void DrawTriangleLines(CData $vec1, CData $vec2, CData $vec3, CData $color)
 * @method void EndBlendMode()
 * @method void EndDrawing()
 * @method void EndMode2D()
 * @method void EndMode3D()
 * @method void EndScissorMode()
 * @method CData Fade(CData $color, float $alpha)
 * @method CData GetColor(int $hex)
 * @method CData GetCollisionRec(CData $rec1, CData $rec2)
 * @method int GetFPS()
 * @method float GetFrameTime()
 * @method int GetGestureDetected()
 * @method CData GetMousePosition()
 * @method CData GetMouseRay(CData $mousePosition, CData $camera)
 * @method float GetMouseWheelMove()
 * @method int GetMouseX()
 * @method int GetMouseY()
 * @method float GetMusicTimeLength(CData $music)
 * @method float GetMusicTimePlayed(CData $music)
 * @method int GetRandomValue(int $min, int $max)
 * @method CData GetScreenToWorld2D(CData $position, CData $camera)
 * @method int GetScreenWidth()
 * @method int GetScreenHeight()
 * @method int GetSoundsPlaying()
 * @method float GetTime()
 * @method CData GetTouchPosition(int $index)
 * @method CData GetWorldToScreen(CData $position, CData $camera)
 * @method CData GetWorldToScreen2D(CData $position, CData $camera)
 * @method void InitAudioDevice()
 * @method void InitWindow(int $width, int $height, string $title)
 * @method bool IsKeyDown(int $key)
 * @method bool IsKeyPressed(int $key)
 * @method bool IsMouseButtonDown(int $button)
 * @method bool IsMouseButtonPressed(int $button)
 * @method CData LoadImage(string $filename)
 * @method CData LoadSound(string $filename)
 * @method int LoadStorageValue(int $position)
 * @method CData LoadMusicStream(string $filename)
 * @method CData LoadTexture(string $filename)
 * @method CData LoadTextureFromImage(CData $image)
 * @method int MeasureText(string $text, int $fontSize)
 * @method void PauseMusicStream(CData $music)
 * @method void PlayMusicStream(CData $music)
 * @method void PlaySound(CData $sound)
 * @method void PlaySoundMulti(CData $sound)
 * @method void ResumeMusicStream(CData $music)
 * @method bool SaveStorageValue(int $position, int $value)
 * @method void SetCameraMode(CData $camera, int $mode)
 * @method void SetConfigFlags(int $flags)
 * @method void SetMusicPitch(CData $music, float $pitch)
 * @method void SetSoundVolume(CData $sound, float $volume)
 * @method void SetTargetFPS(int $fps)
 * @method void SetTextureFilter(CData $texture, int $filterMode)
 * @method void StopMusicStream(CData $music)
 * @method void StopSoundMulti()
 * @method void UnloadImage(CData $image)
 * @method void UnloadMusicStream(CData $music)
 * @method void UnloadSound(CData $sound)
 * @method void UnloadTexture(CData $texture)
 * @method void UpdateCamera(CData $camera)
 * @method void UpdateMusicStream(CData $music)
 * @method bool WindowShouldClose()
 */
class RaylibFFIProxy
{
    private FFI $ffi;

    public function __construct(FFI $ffi)
    {
        $this->ffi = $ffi;
    }

    public function __call(string $method, array $args)
    {
        $callable = [$this->ffi, $method];
        return $callable(...$args);
    }
}
